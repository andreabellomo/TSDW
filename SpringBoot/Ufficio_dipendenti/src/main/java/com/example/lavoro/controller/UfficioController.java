package com.example.lavoro.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.PostMapping;

import com.example.lavoro.data.UfficioRepository;
import com.example.lavoro.model.Dipendente;
import com.example.lavoro.model.Ufficio;

@Controller
@RequestMapping("/ufficio")
public class UfficioController {
    
    @Autowired
    UfficioRepository ufficioRepository;

    @GetMapping
    public String index(Model model){

        List<Ufficio> uffici = ufficioRepository.findAll();
        model.addAttribute("uffici", uffici);
        return "uffici";
        
    }

    @PostMapping()
    public String insert(Ufficio ufficio){

        ufficioRepository.save(ufficio);
        return "redirect:/ufficio";
        
    }

    @GetMapping("/about/{id}")
    public String insert(Model model, @PathVariable Long id){

        Ufficio ufficio = ufficioRepository.findById(id).orElse(null);
        model.addAttribute("ufficio", ufficio);
        return "ufficio";
        
    }

    @GetMapping("/delete/{id}")
    public String delete( @PathVariable Long id){

        
       ufficioRepository.deleteById(id);
       return "redirect:/ufficio";
        
    }

    @PostMapping("/update/{id}")
    public String update(Ufficio ufficio, @PathVariable long id){

        
        ufficioRepository.save(ufficio);
        return "redirect:/ufficio";
        
    }

    


}
