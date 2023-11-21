public class T2 extends Thread{
    private static String name;
    Shared shared;
    
    public T2(String name , Shared shared){
        this.name = name;
        this.shared = shared;
    }

    public void run(){

        while(true){
            try{
            sleep(100);
        }catch(InterruptedException e) {}
            
        shared.notifyAllShared();

        int x = shared.get();

        if( x ==-1 ) return ;
        else continue;
        }

        


    }

}