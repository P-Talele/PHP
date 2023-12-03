public class Pelindrome 
{
     public static void main(String[]args)
     {
           int no=212;
           int rev=0;
           int  temp=no;
           int rem;

            while (no!=0)
            {
                rem=no%10;
                rev=rev*10+rem;
                no=no/10;
            }
             if(rev==temp)
            {
                 System.out.println("it is pelindrome number");
            }
            else
            {
                 System.out.println("it is not Pendrome Number");
            }
     }

     
}