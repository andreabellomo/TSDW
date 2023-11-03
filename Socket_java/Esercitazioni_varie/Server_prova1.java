import java.net.*;
import java.io.*;


public class Server_prova1 {

    public static String history = "";
    
    public static String list (String s){
        s = s.trim();

        if(s.equals("SHOW") || s.equals("SHOW\n") ){
            return history;
        }
        history = history + s + ";";
            return "OK";

    }

    public static int PORT = 3333;
    

    public static void main (String args[]){

        ServerSocket server = null;

        try{
            server = new ServerSocket(PORT);
            System.out.println("server A started" + server);
        }catch (IOException e ){
            e.printStackTrace();
        }

        BufferedReader in  = null;
        PrintWriter out = null;
        Socket client = null;

        try{
            while(true){
                System.out.println("Waiting for new connection...");

                client = server.accept();
                System.out.println("New connection with "+ client);

                in =  new BufferedReader(new InputStreamReader(client.getInputStream()));
                out = new PrintWriter(client.getOutputStream(),true);

                

                try{
                    String line;
                    while((line = in.readLine()) != null){
                    System.out.println(" il server A ha ricevuto : " + line);
                    out.println(list(line));
                    }
                }catch(IOException e){
            e.printStackTrace();
        }
                
            }
            
        }catch(IOException e){
            e.printStackTrace();
        }

        try{
      System.out.println("Server_E closing...");
      server.close();
      in.close();
      out.close();
    }catch(IOException e){}


    }


}
