package com.example.musica.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class Song {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String titolo;
    private Integer durata;

    public Song() {
    }
    
    public Song(String titolo, Integer durata) {
        this.titolo = titolo;
        this.durata = durata;
    }
    public Long getId() {
        return id;
    }
    public void setId(Long id) {
        this.id = id;
    }
    public String getTitolo() {
        return titolo;
    }
    public void setTitolo(String titolo) {
        this.titolo = titolo;
    }
    public Integer getDurata() {
        return durata;
    }
    public void setDurata(Integer durata) {
        this.durata = durata;
    }

    @ManyToOne
    @JoinColumn(name = "singer")
    private Singer singer;

    public Singer getSinger() {
        return singer;
    }
 
    public void setSinger(Singer singer) {
        this.singer = singer;
    }

    
}
