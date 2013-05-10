<?php

/*
  Tripwire Configuration File
  ===========================
*/

  $config = array(

    // Debugging (Verbose Output)
    'debug' => false ,

    // File Containing the MD5 Keys
    'md5file' => 'tripwire_filelist.md5' ,
    // Delimited for Filelist
    'delim' => '&&&' ,

    'exclude' => array(
      // Specific Files to Exclude from Scanning
      'files' => array(
        '.' ,
        '..' ,
        'tripwire_filelist.md5' ,
        'tripwire_config.php' ,
        'error_log' ,
        'backup.zip' ,
        '.bash_history'
      ) ,
      // Extensions to Exclude from Scanning
      'extensions' => array(
        'afm' ,
        // Flash
        'flv' , 'swf' ,
        // Images
        'bmp' , 'gif' , 'jpeg' , 'jpg' , 'png' , 'psd' ,
        'log' ,
        'txt' ,
        // Videos
        'mp4' , 'mov' , 'ogv' , 'webm' ,
        // Dreamweaver
        'mno' ,
        // Audio
        'aif' , 'mp3' ,
        // Microsoft Word Files
        'doc' , 'docx' , 'xls' , 'xlsx' ,
        // Compressed Files
        '7z' , 'rar' , 'sitx' , 'zip'
      )
    ) ,

    'email' => array(
      'to' => array(            // Email these people on changes
        // 'user@server.com'
      ) ,
      'title' => '[Tripwire] Change Detected - [X] Files' , // The Email Title
      'body' => "Tripwire (https://github.com/lucanos/Tripwire) has detected a number of changes:\n\n[AN] Files Added:\n[AF]\n\n[MN] Files Modified:\n[MF]\n\n[DN] Files Deleted:\n[DF]\n\n"   // The Email Template
    )

  );
