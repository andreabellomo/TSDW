package com.example.musica.data;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.musica.model.Song;

public interface SongRepository extends JpaRepository<Song,Long>{
    
}
