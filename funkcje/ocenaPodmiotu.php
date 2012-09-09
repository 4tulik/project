<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ocenaPodmiotu
 *
 * @author lukasz
 */
class ocenaPodmiotu {

    public function OcenCeche($nazwa) {

        echo <<< KONIEC
                <script>
                $(function(){
                    $('.$nazwa').rating({
                        focus: function(value, link){
                            // 'this' is the hidden form element holding the current value
                            // 'value' is the value selected
                            // 'element' points to the link element that received the click.
                            var tip = $('#$nazwa');
                            tip[0].data = tip[0].data || tip.html();
                            tip.html(link.title || 'value: '+value);
                        },
                        blur: function(value, link){
                            var tip = $('#$nazwa');
                            $('#$nazwa').html(tip[0].data || '');
                        }
  
                    });
                });
            </script>
KONIEC;
        for ($i = 1; $i <= 10; $i++) {
            $k = $i / 2;
            echo "<input class=\"$nazwa\" name=\"$nazwa\" type=\"radio\"  title=\"$k\" value=\"$i\" />";
        }
        echo "<span id=\"$nazwa\" style=\"margin:0 0 0 10px;\">&nbsp;</span><br />";
    }

}
?>
