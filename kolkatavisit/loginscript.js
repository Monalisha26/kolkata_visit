 public static boolean CheckUsernameExists(String username)
{
    boolean usernameExists = false;

    try
    {
       
	   
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'kv_db');
   $q="select * user(username,password) values('$username','$password')";
   $status=mysqli_query($con,$q);
    if($status==1)
	{ 
     if(usernameCounter.equals(username))
	 {
		 ("It already exists");
              usernameExists = true;
	 }
	}
	   
	   
	   

     }

     catch (SQLException e) 
     {
        System.out.println("SQL Exception: "+ e.toString());
     } 
     catch (ClassNotFoundException cE) 
     {
        System.out.println("Class Not Found Exception: "+ cE.toString());
     }

 return usernameExists;
 }
