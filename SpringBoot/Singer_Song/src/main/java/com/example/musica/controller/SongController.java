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
import com.example.musica.model.Song;


@Controller
@RequestMapping("/song")
public class SongController {


    SongRepository songRepository;
    SingerRepository singerRepository;

    public SongController(SongRepository songRepository, SingerRepository singerRepository) {
        this.songRepository = songRepository;
        this.singerRepository = singerRepository;
    }

    @GetMapping
    public String index(Model model){

        List<Song> songs = songRepository.findAll();
        List<Singer> singers = singerRepository.findAll();
        
        model.addAttribute("songs", songs);
        model.addAttribute("singers", singers);
        return "songs";
        
    }

    @PostMapping
    public String insert(Song song){

        songRepository.save(song);
        return "redirect:/song" ;
        
    }

    @GetMapping("/about/{id}")
    public String show(Model model, @PathVariable Long id){

        Song song = songRepository.findById(id).orElse(null);
        List<Singer> singers = singerRepository.findAll();
        model.addAttribute("song", song);
        model.addAttribute("singers", singers);
        return "song";

    }

    @PostMapping("/update/{id}")
    public String update(Song song, @PathVariable Long id){

        
        songRepository.save(song);
        return "redirect:/song" ;

    }

    @GetMapping("/delete/{id}")
    public String dlete(@PathVariable Long id){


        songRepository.deleteById(id);
        return "redirect:/song" ;
        
    }
    
}
