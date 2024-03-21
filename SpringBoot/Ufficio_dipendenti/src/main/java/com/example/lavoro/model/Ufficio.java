package com.example.lavoro.model;


import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToMany;
import jakarta.persistence.GenerationType;

@Entity
public class Ufficio {

    @Id
    @GeneratedValue(strategy= GenerationType.IDENTITY)
    private Long id;
    private String nome;
    private String settore;

    public Ufficio(){

    }
    
    public Ufficio(String nome, String settore) {
        this.nome = nome;
        this.settore = settore;
    }
    public Long getId() {
        return id;
    }
    public void setId(Long id) {
        this.id = id;

    }

    @OneToMany(mappedBy="ufficio", cascade = CascadeType.ALL, orphanRemoval = true)
    private List<Dipendente> dipendenti = new ArrayList<>();
    public List<Dipendente> getDipendenti() {
        return dipendenti;
    }

    public void setDipendenti(List<Dipendente> dipendenti) {
        this.dipendenti = dipendenti;
    }

    @JoinColumn(name = "ufficio_id")
    
    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }
    public String getSettore() {
        return settore;
    }
    public void setSettore(String settore) {
        this.settore = settore;
    }


    
}
