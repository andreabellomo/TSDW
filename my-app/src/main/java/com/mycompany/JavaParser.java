/*package com.mycompany;
import java.io.IOException;
import java.util.List;
import java.util.Scanner;
import java.util.concurrent.TimeoutException;

import com.github.javaparser.StaticJavaParser;
import com.github.javaparser.ast.CompilationUnit;
import com.github.javaparser.ast.stmt.Statement;
import com.rabbitmq.client.Channel;
import com.rabbitmq.client.Connection;
import com.rabbitmq.client.ConnectionFactory;



public class JavaParser {
    public static void main(String[] args) throws IOException, TimeoutException {

        Scanner scanner = new Scanner(System.in);
        // Leggi l'input da System.in
        StringBuilder input = new StringBuilder();
        while (scanner.hasNext()) {
            input.append(scanner.nextLine()).append("\n");
        }

        // Analizza il contenuto come codice Java
        CompilationUnit compilationUnit = StaticJavaParser.parse(input.toString());

        List<Statement> statements = compilationUnit.findAll(Statement.class);


        ConnectionFactory factory = new ConnectionFactory();
        factory.setHost("rabbitcontainer");
        
        try (Connection connection = factory.newConnection(); Channel channel = connection.createChannel()) {
            // Dichiarazione della coda
            channel.queueDeclare("mia_coda", false, false, false, null);

            // Invio del messaggio alla coda
            for (Statement statement : statements) {
                String message = "Statement: " + statement;
                channel.basicPublish("", "mia_coda", null, message.getBytes());
                System.out.println(" [x] Sent '" + message + "'");
            }
        } 
    }
}
*/

// src/main/java/com/example/MessageSender.java
package com.mycompany;

import com.rabbitmq.client.Connection;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.List;
import java.util.Scanner;

import com.rabbitmq.client.Channel;
import com.rabbitmq.client.ConnectionFactory;


import com.github.javaparser.StaticJavaParser;
import com.github.javaparser.ast.CompilationUnit;
import com.github.javaparser.ast.stmt.Statement;

public class JavaParser {

    private final static String QUEUE_NAME = "hello";

    public static void main(String[] args) throws Exception {

         String filePath = "Sorgente.txt";
         StringBuilder input = null;

        try {
            // Crea un oggetto File
            File file = new File(filePath);

            // Crea un oggetto Scanner per leggere dal file
            Scanner scanner = new Scanner(file);

            // Leggi l'input dal file
            input = new StringBuilder();
            while (scanner.hasNextLine()) {
                input.append(scanner.nextLine()).append("\n");
            }

            // Chiudi lo scanner dopo aver letto il file
            scanner.close();

            // Fai qualcosa con l'input
            //System.out.println("Contenuto del file:\n" + input.toString());
        } catch (FileNotFoundException e) {
            // Gestisci l'eccezione se il file non viene trovato
            e.printStackTrace();
        }

        CompilationUnit compilationUnit = StaticJavaParser.parse(input.toString());
        List<Statement> statements = compilationUnit.findAll(Statement.class);
    
        ConnectionFactory factory = new ConnectionFactory();
        factory.setHost("my-app-rabbitmq-container-1"); // Nome del container RabbitMQ

        try (Connection connection = factory.newConnection();
            Channel channel = connection.createChannel()) {
            channel.queueDeclare(QUEUE_NAME, false, false, false, null);
            //System.out.println("Contenuto del file:\n" + input.toString());
            
            for (Statement statement : statements) {
                String message = "Statement: " + statement;
                channel.basicPublish("", QUEUE_NAME, null, message.getBytes());
                System.out.println(" [x] Sent '" + message + "'");
            }
            
        }
    }
}
