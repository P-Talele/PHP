class   block 
{
      public void input()
      {
             System.out.println("This is instance method");
      }
 
      static {
                System.out.println("this is static block");
             }
} 
public class Static_Block
{
     public static void main(String[]arg)
     {
      block obj=new block();
      System.out.println("This is main  method");
      obj.input();
     }
}