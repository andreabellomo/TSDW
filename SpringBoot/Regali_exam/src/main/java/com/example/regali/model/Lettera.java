package com.example.regali.model;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;

@Entity
public class Lettera {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long Id;
    private String nome;
    private Integer quantita;
    private Integer consegnata;

    public Lettera(){
        
    }
    
    public Lettera(String nome, Integer quantita, Integer consegnata) {
        this.nome = nome;
        this.quantita = quantita;
        this.consegnata = consegnata;
    }
    public long getId() {
        return Id;
    }
    public void setId(long id) {
        Id = id;
    }
    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }
    public Integer getQuantita() {
        return quantita;
    }
    public void setQuantita(Integer quantita) {
        this.quantita = quantita;
    }
    public Integer getConsegnata() {
        return consegnata;
    }
    public void setConsegnata(Integer consegnata) {
        this.consegnata = consegnata;
    }





    
}
