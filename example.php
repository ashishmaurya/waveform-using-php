<?php

require ('classAudioFileModified.php');
$target_wave = "test.wav";// Path to your music file
$WAVE_PATH = "wave_test.svg"; // path to your svg file (waveform file)
$AF = new AudioFile;
$AF->loadFile($target_wave);
if ($AF->wave_id == "RIFF") {
    $AF->visual_width = 800; // sets the width of the waveform
    $AF->visual_height = 100; // sets the height of the waveform
    $AF->getVisualizationSVG($WAVE_PATH); // this line generates the waveform
}
