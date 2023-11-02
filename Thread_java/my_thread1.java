public class my_thread1 extends Thread {
    my_thread1() {
        System.out.println("myThread constructor");
    }

    public void run() {
        // Starting
        System.out.println("In run di myThread");
        Thread t = Thread.currentThread();
        System.out.println("myThread running pid " + t.toString());
        System.out.println(t.getName());
        for (int i = 0; i < 10; i++) {
            System.out.println("\t\t>");
        }
    }

      public static void main(String[] args) {
        my_thread1 thread = new my_thread1();
        thread.start();
    }

}