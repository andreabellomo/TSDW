public class ThreadT2 extends Thread {

    Shared shared ;

    public ThreadT2(Shared shared){
        this.shared = new Shared();
    }

    public void run(){

        while(true){

            try{
                sleep(300);
            }catch(InterruptedException e ){}

            synchronized (shared){
                shared.notifyAll();
                int x = shared.getShared();

                if(x == -1) break;
                else continue;
            }
            
        }

    }

}