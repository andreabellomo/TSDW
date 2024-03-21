package com.example.lavoro.data;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.lavoro.model.Ufficio;

public interface UfficioRepository extends JpaRepository<Ufficio,Long> {
    
}
