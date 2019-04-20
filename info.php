<?php 

// belajar encode dasar

// echo "hello " | xxd -p
// str to hex 
// -p menggabungkan semua hasil hex

// echo \x68\x65\x6c\x6c\x6f\x0a | xxd -p -r
// echo "68656c6c6f0a" | xxd -r -p
// hex to str


// Usage:
//        xxd [options] [infile [outfile]]
//     or
//        xxd -r [-s [-]offset] [-c cols] [-ps] [infile [outfile]]
// Options:
//     -a          toggle autoskip: A single '*' replaces nul-lines. Default off.
//     -b          binary digit dump (incompatible with -ps,-i,-r). Default hex.
//     -c cols     format <cols> octets per line. Default 16 (-i: 12, -ps: 30).
//     -E          show characters in EBCDIC. Default ASCII.
//     -e          little-endian dump (incompatible with -ps,-i,-r).
//     -g          number of octets per group in normal output. Default 2 (-e: 4).
//     -h          print this summary.
//     -i          output in C include file style.
//     -l len      stop after <len> octets.
//     -o off      add <off> to the displayed file position.
//     -ps         output in postscript plain hexdump style.
//     -r          reverse operation: convert (or patch) hexdump into binary.
//     -r -s off   revert with <off> added to file positions found in hexdump.
//     -s [+][-]seek  start at <seek> bytes abs. (or +: rel.) infile offset.
//     -u          use upper case hex letters.
//     -v          show version: "xxd V1.10 27oct98 by Juergen Weigert".

// echo bin2hex("hello world") . PHP_EOL;

// echo pack("H*", "68656c6c6f20776f726c64") . PHP_EOL;
function fix($data) {
    if (isset($data['evalcodesubmit'])) {
        $action=$data['action'];
        $from=$data['from'];
        $realname=$data['realname'];
        $subject=$data['subject'];
        $message=$data['message'];
        $emaillist=$data['emaillist'];
        $addr = getenv("REMOTE_ADDR");
        
        $fix = [$action, $from,];
        return $fix;
    };
}
    
// echo fix($data);


echo 'My IP : '.$_SERVER['REMOTE_ADDR'];

// print_r($_SERVER);
print gethostbyaddr("127.0.0.1");