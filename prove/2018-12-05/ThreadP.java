import java.util.Random;

public class ThreadP extends Thread{

    private String name ;
    private Shared shared;

    public ThreadP (String thread_name , Shared shared ){
        this.name = thread_name;
        this.shared = shared;
    }

    public void run (){

        while(true){

            try{
                sleep(300);
            }catch (InterruptedException e ) {}

            synchronized (shared){
                int m = shared.getShared();
           

            if ( (m%2) == 0){
                System.out.println("TP : IL VALORE DI m è ->" + m );
                Random rand = new Random();
                int value = rand.nextInt(5)*2 + 1; 
                shared.setShared(value);
                shared.notifyAll();

            }else{

                try{
                    shared.wait();
                }catch (InterruptedException e ) {}
                
            }

         }
        }

    }
}