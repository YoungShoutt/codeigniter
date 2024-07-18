<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pdf {
 
   function __construct(){
    
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }
 
        return new mPDF($param);
    }

    function loadc($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }
 
        return new mPDF('utf-8', array(197,140),0,'',0,0,0,0,0,0);
    }

    function loadspb($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        //if ($params == NULL)
        //{
        //    $param = '"en-GB-x","A4-L","","",10,10,10,10,6,3';
        //}
 
       // return new mPDF('utf-8', array(297,210),0,'',0,0,0,0,0,0);
    }

    function loadfp($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }
 
        return new mPDF('utf-8', array(217,278),0,'',0,0,0,0,0,0);
    }
       function loadbs($param=NULL)
    {
        
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",0,0,0,0,0,0,"P"';
        }
 
        return new mPDF('utf-8', array(217,278),0,'',0,0,0,0,0,0);
    }
    
    function loadpr($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
        }
    
        return new mPDF('windows-1252', array(140,351),0,'',0,0,0,0,0,0);
    }

    function loadpo($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3,"L"';
        }
 
        return new mPDF('utf-8',array(140,351),0,'',0,0,0,0,0,0);
    }
     function loadrol($param=NULL)
    {
        
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
            
        }
 
        return new mPDF('utf-8', array(280,352),0,'',0,0,0,0,0,0);
    }
    function loada4($param=NULL)
    {
        
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
            
        }
 
        return new mPDF('utf-8', array(297,210),0,'',0,0,0,0,0,0);
    }
     function loadmat($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
             
        }

        return new mPDF('utf-8',"A4-L",0,'',0,0,0,0,0,0);
    }
        function loadbon($param=NULL)
   {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3,"L"';
        }
 
        return new mPDF('utf-8',array(210,297),0,'',0,0,0,0,0,0);
    }
    function load_bon_pm($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
             
        }

        return new mPDF('utf-8', 'A4');
    }
    function loadsrtpsn($param=NULL)
     {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3,"L"';
        }
 
        return new mPDF('utf-8',array(210,297),0,'',0,0,0,0,0,0);
    }
    function load_finance($param=NULL)
     {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3,"L"';
        }
 
        return new mPDF('utf-8',array(210,297),0,'',0,0,0,0,0,0);
    }
    
    function loaddo($param=NULL)
    {
        //ukuran form surat jalan
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
            
        }
 
        return new mPDF('utf-8', array(280,352),0,'',0,0,0,0,0,0);
    }
    function loadsetfp($param=NULL)
    {
        
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
            
        }
 
        return new mPDF('utf-8', array(279,216),0,'',0,0,0,0,0,0);
    }

    function loadkwi($param=NULL)
    {
        
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
 
        if ($params == NULL)
        {
            $param = '"en-GB-x","","","",10,10,10,10,6,3';
            
        }
 
        return new mPDF('utf-8', array(140,216),0,'',0,0,0,0,0,0);
    }

    
}