package com.example.lavoro.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.lavoro.data.DipendenteRepository;
import com.example.lavoro.data.UfficioRepository;
import com.example.lavoro.model.Dipendente;


@RequestMapping("/dipendente")
@Controller
public class DipendenteController {

    UfficioRepository ufficioRepository;
    DipendenteRepository dipendenteRepository;

    

    public DipendenteController(UfficioRepository ufficioRepository, DipendenteRepository dipendenteRepository) {
        this.ufficioRepository = ufficioRepository;
        this.dipendenteRepository = dipendenteRepository;
    }

    @GetMapping
    public String index(Model model){

        List<Dipendente> dipendenti = dipendenteRepository.findAll();
        model.addAttribute("dipendenti", dipendenti);
        return "dipendenti";
        
    }

    @PostMapping()
    public String insert(Dipendente dipendente){

        dipendenteRepository.save(dipendente);
        return "redirect:/dipendente";
        
    }
}
