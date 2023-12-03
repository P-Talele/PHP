public class This_Keyworld 
{ 
      public void disp()
      {
        
          System.out.println("This Is Disp Method");
          this.disp2();
          this.disp3();
      }
          public void disp2()
      {
          

          System.out.println("This Is Disp2 Method");

      }

          public void disp3()
      {
          
   
         System.out.println("This Is Disp3 Method");
              

      }
     public static void main(String[]argbs)
     {

          This_Keyworld obj= new This_Keyworld();
          obj.disp();
     }
    
}
