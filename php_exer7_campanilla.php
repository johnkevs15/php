 <center>
        <form action="" method="post"  style=" width:300px; margin-top:100px; display: inline-block;">
                <label >Quiz<input type="text" name="Quiz" required style ="width: 100%; padding: 12px 20px; margin: 8px 0;  border: 1px solid #ccc; box-sizing: border-box;"></label>
                <label >Projects<input type="text" name="Projects" required style ="width: 100%; padding: 12px 20px; margin: 8px 0; border: 1px solid #ccc; box-sizing: border-box;"></label>
                <label >Midterm Exam<input type="text" name="Midterm_Exam" required style ="width: 100%; padding: 12px 20px; margin: 8px 0;  border: 1px solid #ccc; box-sizing: border-box;"></label>
                <label >Exercises<input type="text" name="Exercises" required style ="width: 100%; padding: 12px 20px; margin: 8px 0;  border: 1px solid #ccc; box-sizing: border-box;"></label>
                <button type="submit" name="submit" style= " background-color: #04AA6D; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">Submit</button>
        
        </form>
</center>

        <?php
            if(isset($_POST['submit']))
        {
       
        $q=$_POST['Quiz']; 
        $p=$_POST['Projects']; 
        $m_e=$_POST['Midterm_Exam'];
        $e=$_POST['Exercises']; 
        $percent1 = 20;
        $percent2 = 30;
       
        $Quiz =  ($percent1 /100) * (float)$q;
        $Projects =  ($percent2/100)* (float)$p ;
        $Midterm_Exam = ( $percent2 /100) * (float)$m_e;
        $Exercises =  ($percent2 /100)* (float)$e;
        
        
        $MidtermGrade=$Quiz+$Projects+$Midterm_Exam+$Exercises ;
       
        switch($MidtermGrade){
            case  ($MidtermGrade>=1.0&&$MidtermGrade<=1.5):
                $grade="Perfect";
            break;
            case  ($MidtermGrade>=1.6&&$MidtermGrade<=2.0):
                $grade="Great";
            break;
            case  ($MidtermGrade>=2.1&&$MidtermGrade<=2.5):
                $grade="Good";

            break;
            case  ($MidtermGrade>=2.6&&$MidtermGrade<=3.0):
                $grade="Try Harder!";

            break;
            case  ($MidtermGrade>=3.1):
                $grade="Better Luck Next Time";

            break;

        
        };
    


        echo "<br>";
      
        echo "<font size=5><center>Midterm Grade is: ".round($MidtermGrade,PHP_ROUND_HALF_UP )."</center><br>"; 
        echo "<font size=5><center>Message: ".$grade."</center>"; 
}          
?>
   
        