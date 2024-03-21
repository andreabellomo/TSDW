package com.example.magazzino.controller;

import java.util.List;


import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.magazzino.data.CategoriaRepository;
import com.example.magazzino.data.ProdottoRepository;
import com.example.magazzino.model.Prodotto;

@Controller
@RequestMapping("/prodotto")
public class ProdottoController {

    
    ProdottoRepository prodottoRepository;
    CategoriaRepository categoriaRepository;

    public ProdottoController(ProdottoRepository prodottoRepository, CategoriaRepository categoriaRepository) {
        this.prodottoRepository = prodottoRepository;
        this.categoriaRepository = categoriaRepository;
    }

    @GetMapping
    public String getAll(Model model){

        List<Prodotto> prodotti = prodottoRepository.findAll();
        model.addAttribute("prodotti", prodotti);
        //model.addAttribute("categorie", categoriaRepository.findAll());
        return "prodotti";

    }

    @PostMapping
    public String create(Prodotto prodotto){

        prodottoRepository.save(prodotto);
        return "redirect:/prodotto";

    }

    @GetMapping("/about/{id}")
    public String show(@PathVariable Long id , Model model){

        Prodotto prodotto = prodottoRepository.findById(id).orElse(null);
        model.addAttribute("prodotto", prodotto);
        return "prodotto";

    }

    @PostMapping("/update/{id}")
    public String update(Prodotto prodotto){

        prodottoRepository.save(prodotto);
        return "redirect:/prodotto";

    }

    @PostMapping("/delete/{id}")
    public String delete(@PathVariable Long id){

        prodottoRepository.deleteById(id);
        return "redirect:/prodotto";

    }

    @GetMapping("/giacenza")
    public String getgiac(Model model){

        List<Prodotto> prodotti = prodottoRepository.findByGiacenzaGreaterThan(5);
        model.addAttribute("prodotti", prodotti);
        //model.addAttribute("categorie", categoriaRepository.findAll());
        return "prodotti";

    }




    
}
