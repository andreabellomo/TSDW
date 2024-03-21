package com.example.bookMio2.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.bookMio2.data.BookRepository;
import com.example.bookMio2.model.Book;

@Controller
@RequestMapping("/book")
public class BookController {

    @Autowired
    BookRepository bookRepository;

    @GetMapping
    public String listBook(Model model){

        model.addAttribute("books", bookRepository.findAll());
        return "books";

    }   
    
    @GetMapping("/bellomo")
    public String listBookBellomo(Model model){

        model.addAttribute("books", bookRepository.findByAuthor("bellomo"));
        return "books";

    } 

    @PostMapping
    public String inserisci(Book book){

        bookRepository.save(book);
        return "redirect:/book";
    }

    @GetMapping("/about/{id}")
    public String show(@PathVariable Long id,Model model){

        Book book = bookRepository.findById(id).orElse(null);
        model.addAttribute("book",book);
        return "book";

    } 

    @PostMapping("/update")
    public String modifica(Book book){

        bookRepository.save(book);
        return "redirect:/book";
    }

    @PostMapping("/delete/{id}")
    public String show(@PathVariable Long id){

        bookRepository.deleteById(id);
        return "redirect:/book";

    } 

    

    @GetMapping("/bonus")
    public String radoppia(Model model){

        List<Book> books = bookRepository.findAll();

        for (Book book : books) {

            book.setPrice(book.getPrice()*2);
            bookRepository.save(book);
        }

        return "redirect:/book";


    }




}
