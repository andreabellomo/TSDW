package com.example.magazzino.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.magazzino.data.CategoriaRepository;
import com.example.magazzino.model.Categoria;

@Controller
@RequestMapping("/categoria")
public class CategoriaController {

    @Autowired
    CategoriaRepository categoriaRepository;

    @GetMapping
    public String getAll(Model model){

        List<Categoria> categorie = categoriaRepository.findAll();
        model.addAttribute("categorie", categorie);
        return "categorie";

    }

    @PostMapping
    public String create(Categoria categoria){

        categoriaRepository.save(categoria);
        return "redirect:/categoria";

    }

    @GetMapping("/about/{id}")
    public String show(@PathVariable Long id , Model model){

        Categoria categoria = categoriaRepository.findById(id).orElse(null);
        model.addAttribute("categoria", categoria);
        return "categoria";

    }

    @PostMapping("/update/{id}")
    public String update(Categoria categoria){

        categoriaRepository.save(categoria);
        return "redirect:/categoria";

    }

    @PostMapping("/delete/{id}")
    public String delete(@PathVariable Long id){

        categoriaRepository.deleteById(id);
        return "redirect:/categoria";

    }




    
}
