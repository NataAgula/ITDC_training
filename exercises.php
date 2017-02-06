

       <ul>
          <li><a href="index.php?page=home">HOME</a></li>
          <li><a href="index.php?page=blog">BLOG</a></li>
          <li><a href="index.php?page=about">ABOUT</a></li>
          <li><a href="index.php?page=contact">CONTACT</a></li>

       </ul>




       <?php 


       if(isset($_GET['page']))
       {

        // can use switch instead of second if
        if($_GET['page'] == 'blog') {
          echo 'blog post';

        }
        else if($_GET['page'] == 'about')
        {
        echo 'about';
      }

      else if($_GET['page'] == 'contact')
        {
        echo 'contact';
      }
      else 
        {
        echo 'home';
      }
       }

       else {
        echo 'home';
       }


       // $i=1;
       //$j=1;

       //while ($i<1000)
      /*{
        $x=$i+$j;
        // $j=$j+$i;

        echo $i; echo " ";
        // echo $j; echo " ";
        $i = $j;
        $j = $x;
      } */


