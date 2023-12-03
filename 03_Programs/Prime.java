public class Prime
{
    public static void main(String[]args)
    {
           int no=11;
           int count=0;

           for (int i=2; i<no; i++)
           {
             if(no%i==0)
              {
                  count++;
              }

             }
           if(count==0)
              {
                 System.out.println("it is Prime number"+count);
              }else
              {
                System.out.println("it is not Prime Numebr");
              }
    }
}