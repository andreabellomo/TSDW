package com.example.regali.data;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.regali.model.Lettera;

public interface LetteraRepository extends JpaRepository<Lettera,Long> {

    List<Lettera> findByConsegnata(int consegnata);
}