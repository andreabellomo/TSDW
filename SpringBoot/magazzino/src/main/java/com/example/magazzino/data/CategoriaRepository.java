package com.example.magazzino.data;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.magazzino.model.Categoria;

public interface CategoriaRepository extends JpaRepository<Categoria,Long> {
    
}
