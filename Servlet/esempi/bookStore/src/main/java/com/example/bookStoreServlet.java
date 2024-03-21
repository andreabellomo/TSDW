package com.example;

import jakarta.servlet.*;
import jakarta.servlet.http.*;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;


public class bookStoreServlet extends HttpServlet{

  private Connection dbConnection = null;

  @Override
  public void init() {
      try {
          Class.forName("com.mysql.cj.jdbc.Driver");

          String DATABASE_URL = "jdbc:mysql://localhost/php_db";
          String dbUsername = "root";
          String dbPassword = "giovanni";
          dbConnection = DriverManager.getConnection(DATABASE_URL, dbUsername, dbPassword);
          System.out.println("Connected to: " + dbConnection.toString());
      } catch (ClassNotFoundException | SQLException e) {
          e.printStackTrace();
      }
  }

  public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
    response.setContentType("text/html");
    PrintWriter out = response.getWriter();

    out.println("<html><head><title>Libreria</title></head>");
    out.println("<body><h1>Benvenuto nella tua libreria</h1>");

    try{
      Statement statement = dbConnection.createStatement();
      String query = "SELECT * FROM Books";
      ResultSet resultSet = statement.executeQuery(query);

      out.println("<ul>");

      while(resultSet.next()){
        out.println("<li>");
        out.println("<form method=\"post\">");
        out.println("<input type=\"text\" name=\"title\" value=\"" + resultSet.getString("title") + "\" />");
        out.println("<input type=\"Submit\" value=\"detail\" name=\"action\"/>");
        out.println("</form>");
        out.println("</li><br>");
      }

      out.println("</ul>");

    }catch(SQLException e){e.printStackTrace();}

    out.println("<br><br>Aggiungi un nuovo libro<br>");

    out.println("<form method=\"post\">");
    out.println("Title: <input name=\"title\" required /><br>");
    out.println("Author: <input name=\"author\" required /><br>");
    out.println("Year: <input name=\"year\" required/>");
    out.println("<input type=\"Submit\" value=\"insert\" name=\"action\"/>");
    out.println("</form>");

    out.println("</body></html>");
  }

  public void doPost(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException{
    String action = request.getParameter("action");
    PrintWriter out = response.getWriter();
    switch(action){
      case "insert": {
        String title = request.getParameter("title");
        String author = request.getParameter("author");
        String year = request.getParameter("year");
    
        try {
          String query = "INSERT INTO Books (title, author, year) VALUES (?,?,?)"; 
          PreparedStatement preparedStatement = dbConnection.prepareStatement(query);
          preparedStatement.setString(1, title);
          preparedStatement.setString(2, author);
          preparedStatement.setString(3, year);
    
          preparedStatement.executeUpdate();
    
          System.out.println("New book added");

          response.sendRedirect(request.getContextPath() + "/books");
        } catch (SQLException e) {
          e.printStackTrace();
        }
      }
      break;

      case "detail": {
        out.println("<html><head><title>Libreria</title></head>");
        out.println("<body><h1>About Page</h1>");
        String title = request.getParameter("title");
        System.out.println(title);
        String query = "SELECT * FROM Books WHERE title = ?";
        try {
          PreparedStatement preparedStatement = dbConnection.prepareStatement(query);
          preparedStatement.setString(1, title);      
          ResultSet resultSet = preparedStatement.executeQuery();
          System.out.println(resultSet);
          while(resultSet.next()){
            out.println("<form method=\"post\">");
            out.println("Title: " + "<input type=\"text\" name=\"title\" value=\"" + resultSet.getString("title") + "\" />");
            out.println("Author: " + "<input type=\"text\" name=\"title\" value=\"" + resultSet.getString("author") + "\" />");
            out.println("Year: " + "<input type=\"text\" name=\"title\" value=\"" + resultSet.getString("year") + "\" />");
            out.println("<input type=\"Submit\" value=\"update\" name=\"action\" />");
            out.println("<input type=\"Submit\" value=\"delete\" name=\"action\" />");
            out.println("</form>");
          }
        out.println("</body></html>");

          
        } catch (SQLException e) {
          e.printStackTrace();
        }

      }
    }

    

  }

  public void destroy(){
    try {
      dbConnection.close();
    } catch (Exception e) {
      e.printStackTrace();
    }
  }



  
}
