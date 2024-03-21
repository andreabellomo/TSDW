package com.example.musica.data;


import org.springframework.data.jpa.repository.JpaRepository;

import com.example.musica.model.Singer;


public interface SingerRepository extends JpaRepository<Singer,Long> {

}
