import java.net.*;
import java.io.*;

public class Producer extends Thread{

    public static Container container;
    //public static String name;
    BufferedReader stdin  = new BufferedReader(new InputStreamReader(System.in));

    public Producer(Container container){

        //this.name = name ;
        this.container = container;

    }


    public void run(){

        System.out.println("P: inizio");

        for ( int k = 0; k < 3 ; k++){

            try{
                System.out.print("P: immettere un numero > ");
                int num = Integer.parseInt(stdin.readLine());

                container.put(num);
                System.out.println("P: ho inserito "+num);
                container.put(num++);
                System.out.println("P: ho inserito "+num);
            }catch(IOException e){
                e.printStackTrace();
            }

            
        }
        System.out.println("P: termino");
        container.put(-1);
        
    }
    
}