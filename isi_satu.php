<?php
                    if (isset($_REQUEST['page'])) {

                      $page = $_REQUEST['page'];

                      switch ($page) {
                        case 'pelamar':
                          echo "Data Pelamar";
                          break;
                        case 'aspek':
                          echo "Aspek Penilaian";
                          break;
                        case 'kriteria':
                          echo "Kriteria Penilaian";
                          break;
                        case 'profile':
                          echo "Profile Matching";
                          break;
                        case 'perhitungan':
                          echo "Hasil Perhitungan";
                          break;
                        case 'gantipassword':
                          echo "Ganti Password";
                          break;
                      }
                    } else {
                      echo "Home";
                    }
