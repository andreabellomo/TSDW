public class  main {
    public static void main(String args[]){
        
        System.out.println("Avvio");

        Shared shared = new Shared();

        ThreadT1 t1 = new ThreadT1(shared);
        ThreadT2 t2 = new ThreadT2(shared);

        t1.start();
        t2.start();


    }
}