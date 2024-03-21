package com.example.magazzino.data;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.magazzino.model.Prodotto;

public interface ProdottoRepository extends JpaRepository<Prodotto,Long> {

    List<Prodotto> findByGiacenzaGreaterThan(int i);
    
}
