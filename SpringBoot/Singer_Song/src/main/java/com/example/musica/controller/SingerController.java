package com.example.musica.controller;

import java.util.List;


import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.musica.data.SingerRepository;
import com.example.musica.data.SongRepository;
import com.example.musica.model.Singer;


@Controller
@RequestMapping("/singer")

public class SingerController {

    
    SingerRepository singerRepository;
    SongRepository songRepository;

    

    public SingerController(SingerRepository singerRepository, SongRepository songRepository) {
        this.singerRepository = singerRepository;
        this.songRepository = songRepository;
    }

    @GetMapping
    public String index(Model model){

        List<Singer> singers = singerRepository.findAll();
        model.addAttribute("singers", singers);
        return "singers";
        
    }

    @PostMapping
    public String insert(Singer singer){

        singerRepository.save(singer);
        return "redirect:/singer" ;
        
    }

    @GetMapping("/about/{id}")
    public String show(Model model, @PathVariable Long id){

        Singer singer = singerRepository.findById(id).orElse(null);
        model.addAttribute("singer", singer);
        return "singer";

    }

    @PostMapping("/update/{id}")
    public String update(Singer singer, @PathVariable Long id){

        singerRepository.save(singer);
        return "redirect:/singer" ;
        
    }

    @GetMapping("/delete/{id}")
    public String dlete(@PathVariable Long id){

        singerRepository.deleteById(id);
        return "redirect:/singer" ;        
    }

}
