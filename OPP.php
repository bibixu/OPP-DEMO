<?php
    // Tinh dóng gói : Class OPP đóng gói các thuộc tính và phương thứ trong nó.
     class OPP{

         protected $a = 1;
         protected $b = 5;
         protected $c = 4;
         public function NT()
         {
             echo "Kết quả PTB2 ?</br>";
         }
    }
    abstract class truu_tuong
    {
        abstract public function loicamon();
    }
    //class TT kế thừa lại class trừ tượng truu_tuong
    class TT extends truu_tuong
    {
        public function loicamon()
        {
            echo "XIN CẢM ƠN </br>";
        }
    }
    $hienthi= new TT();
    $hienthi->loicamon();
    //class Demo kế thừa class OPP
   class Demo extends OPP
    {
        
        public function NT()
        {
            parent::NT();//  class Demo overwire function của class OPP
            $a1 =   $this->a;
            $b1 =   $this->b;
            $c1 =   $this->c;
  
            $delta = ($b1 * $b1) - (4 * $a1 * $c1);
         
            if ($delta < 0){
                echo 'Phương trình vô nghiệm';
            }
            else if ($delta == 0){
                echo 'Phương trình nghiệp kép x1 = x2 = ' . (-$b1/2*$a1);
            }
            else {
                echo'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b1 + sqrt($delta))/ 2 * $a1);
                echo ',x2 = ' . ((-$b1 - sqrt($delta))/2 * $a1);
            }
           
            
        }
    }
        $show = new Demo();
        $show->NT();
        

 
    
   
?> 
