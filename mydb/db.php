<?php
date_default_timezone_set('PRC');
	Class DB {
	    private $link_id;
	    private $handle;
	    private $is_log=0;
	    private $time;
	 	private $hostname='localhost';
	 	private $username='root';
	 	private $password='';  //su27ubk2013
	 	private $database='xikephp';
		private $charset='utf8';
		
	    //构造函数
	    public function __construct() {
	        $this->time = $this->microtime_float();
	        //require_once("./my_config.php");
	        $this->connect($this->hostname,$this->username, $this->password, $this->database, 0);
	        $this->is_log = 0;
	        if($this->is_log){
	            $handle = fopen("./dblog.txt", "a+");
	            $this->handle=$handle;
	        }
    }
	     
	    //数据库连接
	    public function connect($dbhost, $dbuser, $dbpw, $dbname, $pconnect = 0,$charset='utf8') {
	            $this->link_id = @mysql_connect($dbhost, $dbuser, $dbpw);
	            if(!$this->link_id){
	                $this->halt(" 数据库连接失败 ");
	            }
	        
        if(!@mysql_select_db($dbname,$this->link_id)) {
	            $this->halt(' 数据库选择失败 ');
	        }
	        @mysql_query("set names ".$charset);
	    }
	     
	    //查询 $db->query('set names gbk'); 
	    public function query($sql) {
	        $this->write_log(" 查询 ".$sql);
	        $query = mysql_query($sql,$this->link_id);
	        if(!$query) $this->halt('Query Error: ' . $sql);
	        return $query;
	    }
	     
	    //获取一条记录（MYSQL_ASSOC，MYSQL_NUM，MYSQL_BOTH）
		//  $db->get_one('select * from `yourphp_product` where id=2');           
	    public function get_one($sql,$result_type = MYSQL_ASSOC) {
	        $query = $this->query($sql);
	        $rt =& mysql_fetch_array($query);
	        $this->write_log(" 获取一条记录 ".$sql);
	        return $rt;
	    }
	 
	    //获取全部记录
		//  $db->get_all('select * from `yourphp_product` ');           
	    public function get_all($sql,$result_type = MYSQL_ASSOC) {
	        $query = $this->query($sql);
	        $i = 0;
	        $rt = array();
	        while($row =& mysql_fetch_array($query)) {
	            $rt[$i]=$row;
	            $i++;
	        }
	        $this->write_log(" 获取全部记录 ".$sql);
	        return $rt;
	    }
	     
	    //插入的时候不用每个字段都填写
		//$db->insert('yourphp_product',array("catid"=>2,"price"=>12));
	    public function insert($table,$dataArray) {
	        $field = "";
	        $value = "";
	        if( !is_array($dataArray) || count($dataArray)<=0) {
	            $this->halt(' 没有要插入的数据 ');
	            return false;
	        }
	        while(list($key,$val)=each($dataArray)) {
	            $field .="$key,";
	            $value .="'$val',";
	        }
	        $field = substr( $field,0,-1);
	        $value = substr( $value,0,-1);
	        $sql = "insert into $table($field) values($value)";
	        $this->write_log(" 插入 ".$sql);
	        if(!$this->query($sql)) return false;
	        return true;
	    }
	 	//更新的时候需要用到id
	    //更新   $db->updata('yourphp_product',array("price"=>100,"name"=>2),2)
		//更新	id	=2的记录
	    public function update( $table,$dataArray,$id="") {
	        if( !is_array($dataArray) || count($dataArray)<=0
				|| empty($id) //增加ID为空判断
			) {
	            $this->halt(' 没有要更新的数据,或没有指定操作条件 ');
	            return false;
	        }
	        $value = "";
	        while( list($key,$val) = each($dataArray))
	        $value .= "$key = '$val',";
	        $value = substr( $value,0,-1); //原版本有错误
			$condition="id='".intval($id)."'";
	        $sql = "update $table set $value where 1=1 and $condition";
	        $this->write_log(" 更新 ".$sql);
	        if(!$this->query($sql)) return false;
	        return true;
	    }
	 
	    //删除 这个condtion要不得
		//不能进行全部删除操作
		//$db->delete('yourphp_product',2);
		//删除ID=2的记录
	    public function delete( $table,$id="") {
	        if( empty($id) ) {
	            $this->halt(' 没有设置删除的条件 ');
	            return false;
	        }
			$condition="id='".intval($id)."'";
	        $sql = "delete from $table where 1=1 and $condition";
	        $this->write_log(" 删除 ".$sql);
	        if(!$this->query($sql)) return false;
        return true;
	    }
	 
	    //返回结果集
	    public function fetch_array($query, $result_type = MYSQL_ASSOC){
	        $this->write_log(" 返回结果集 ");
	        return mysql_fetch_array($query, $result_type);
	    }
	 
	    //获取记录条数
		//这个方法是配合查询的结果集使用的，查看查询结果是否为空
		//可以不使用这个函数，暂时留着
	    public function num_rows($results) {
	        if(!is_bool($results)) {
	            $num = mysql_num_rows($results);
            $this->write_log(" 获取的记录条数为 ".$num);
	            return $num;
	        } else {
	            return 0;
	        }
	    }
	 
	    //释放结果集
	    public function free_result() {
	        $void = func_get_args();
	        foreach($void as $query) {
	            if(is_resource($query) && get_resource_type($query) === 'mysql result') {
	                return mysql_free_result($query);
	            }
	        }
	        $this->write_log(" 释放结果集 ");
	    }
	 
	    //获取最后插入的id
		//$db->insert_id();查询最近一次操作的ID 
    public function insert_id() {
	        $id = mysql_insert_id($this->link_id);
	        $this->write_log(" 最后插入的id为 ".$id);
	        return $id;
	    }
	 
	    //关闭数据库连接
	    protected function close() {
	        $this->write_log(" 已关闭数据库连接 ");
	        return @mysql_close($this->link_id);
	    }
	 
	    //错误提示
	    private function halt($msg='') {
        $msg .= "\r\n".mysql_error();
	        $this->write_log($msg);
        die($msg);
	    }
	 
	    //析构函数
	    public function __destruct() {
	        $this->free_result();
	        $use_time = ($this-> microtime_float())-($this->time);
	        $this->write_log(" 完成整个查询任务,所用时间为 ".$use_time);
	        if($this->is_log){
	            fclose($this->handle);
	        }
	    }
	     
	    //写入日志文件
	    public function write_log($msg=''){
	        if($this->is_log){
	            $text = date("Y-m-d H:i:s")." ".$msg."\r\n";
	            fwrite($this->handle,$text);
	        }
	    }
	     
	    //获取毫秒数
	    public function microtime_float() {
	        list($usec, $sec) = explode(" ", microtime());
	        return ((float)$usec + (float)$sec);
	    }
	}
	 
	?>
