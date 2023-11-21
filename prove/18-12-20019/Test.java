public class Test{
    public static void main(String args[]){

        Shared shared = new Shared();
        T1 t1 = new T1("t1", shared);
        T2 t2 = new T2("t2", shared);

        t1.start();
        t2.start();
    
    }
}