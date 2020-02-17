<div class="col s12 m4 l4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <!-- <span class="card-title">
                        <h4>Pertemuan</h4>
                    </span> -->
                    <div class="collection">
                        <?php $i=1; while($i<=20): ?>
                        <?php if($i == $progress_belajar_aktiv): ?>
                            <a href="<?php echo base_url('materi/pertemuan/').$i ?>" class="collection-item blue white-text active">Pertemuan ke <?php echo $i ?></a>
                        <?php elseif($i <= $progress_belajar['id_materi']):  ?>
                                <a href="<?php echo base_url('materi/pertemuan/').$i ?>" class="collection-item grey  white-text">Pertemuan ke <?php echo $i ?></a>
                            <?php else: ?>
                                <a  class="collection-item grey black-text no-select" style="cursor: not-allowed;">Pertemuan ke <?php echo $i ?></a>
                            <?php endif ?>
                        <?php $i++; endwhile; ?>
                    </div>
                </div>
            </div>

        </div>