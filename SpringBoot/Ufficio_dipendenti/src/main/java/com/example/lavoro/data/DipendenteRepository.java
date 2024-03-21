package com.example.lavoro.data;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.lavoro.model.Dipendente;

public interface DipendenteRepository extends JpaRepository<Dipendente,Long> {
    
}

