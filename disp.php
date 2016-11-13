<?php
function cp2utf8($cp) {
    is_string($cp) && sscanf($cp, 'U+%x', $cp);
    if ($cp < 0) {
        throw new Exception('');
    }
    if ($cp > 0x10FFFD) {
        throw new Exception('');
    }
    if (0xD800 <= $cp && $cp <= 0xDFFF) {
        throw new Exception('');
    }
    if ($cp <= 0x7F) {
        return chr($cp);
    }
    if ($cp <= 0x7FF) {
        return chr(0xC0 | $cp >> 6 & 0x1F) . chr(0x80 | $cp & 0x3F);
    }
    if ($cp <= 0xFFFF) {
        return chr(0xE0 | $cp >> 12 & 0xF) . chr(0x80 | $cp >> 6 & 0x3F) . chr(0x80 | $cp & 0x3F);
    }
    return chr(0xF0 | $cp >> 18 & 0x7) . chr(0x80 | $cp >> 12 & 0x3F) . chr(0x80 | $cp >> 6 & 0x3F) . chr(0x80 | $cp & 0x3F);
}
echo cp2utf8(0x2000B);
