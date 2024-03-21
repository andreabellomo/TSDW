package com.example.regali.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.regali.data.LetteraRepository;
import com.example.regali.model.Lettera;

@Controller
@RequestMapping("/lettera")
public class LetteraController {

    @Autowired
    LetteraRepository letteraRepository;

    @GetMapping
    public String getAllLettere(Model model){

        List<Lettera> lettere = letteraRepository.findByConsegnata(0);
        model.addAttribute("lettere",lettere );
        return "lettere";
        
    }

    @PostMapping
    public String insert(Lettera lettera){

        letteraRepository.save(lettera);
        return "redirect:/lettera";
        
        
    }

    @PostMapping("/delete/{id}")
    public String delete(@PathVariable Long id, Model model){

        letteraRepository.deleteById(id);
        return "redirect:/lettera";
        
        
    }

    @GetMapping("/about/{id}")
    public String show(Model model, @PathVariable Long id){

        Lettera lettera = letteraRepository.findById(id).orElse(null);
        model.addAttribute("lettera", lettera);
        return "lettera";
    }

    @PostMapping("/update")
    public String update(Lettera lettera){
        System.out.println(lettera.getId());
        System.out.println(lettera.getNome());
        letteraRepository.save(lettera);
        return "redirect:/lettera";
    }

    @GetMapping("/befana")
    public String getBonus(Model model){

        List<Lettera> lettere = letteraRepository.findAll();
        for (Lettera lettera :lettere) {
            
            lettera.setQuantita(lettera.getQuantita()*2);
            letteraRepository.save(lettera);
        }
        return "redirect:/lettera";
        
    }

    
}
