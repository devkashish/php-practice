<?php
class Teachers{
    private function question(){
        echo "How are you?";
    }
    function exam(){//by default public
        $this->question();
    }
    protected function studmarks(){
        echo  "marks";
    }
}
class Management extends Teachers{
    function result(){
        $this->studmarks();
    }

}
$t=new Teachers();
//$t->question(); error- calling private function outside the class
$t->exam();
echo "<br/>";
$m=new Management();
$m->result();
?>