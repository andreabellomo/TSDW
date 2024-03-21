package com.example.bookMio2.data;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.example.bookMio2.model.Book;

@Repository
public interface BookRepository extends JpaRepository<Book,Long>{

    List<Book> findByAuthor(String string);
    
}
