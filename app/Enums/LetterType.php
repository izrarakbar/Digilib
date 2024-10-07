<?php

namespace App\Enums;

enum LetterType
{
    case INCOMING;
    case OUTGOING;
    case PERDIR;
    case KPTS;
    case PEMBERITAHUAN;
    case PAKTA;
    case NOTULEN;

    public function type(): string
    {
        return match ($this) {
            self::INCOMING => 'incoming',
            self::OUTGOING => 'outgoing',
            self::PERDIR => 'perdir',
            self::KPTS => 'kpts',
            self::PEMBERITAHUAN => 'pemberitahuan',
            self::PAKTA => 'pakta',
            self::NOTULEN => 'notulen',
        };
    }
}
