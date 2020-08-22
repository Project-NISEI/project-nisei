#! /usr/bin/env python
'''
Script to make importing translations slightly less annoying.

To use, unzip translations for a given product to e.g. Downloads. Then run,
for example:

    python transimport.py 'Magnum Opus' \
        --lang='zh si' \
        ~/Downloads/Translations/Chinese\ \(Simplified\) \
        public/files/Chinese_Simplified/

TODO: better usage info
TODO: should be able to derive the language code from files inside dst_dir
'''

import sys
from argparse import ArgumentParser
from os import path
from shutil import copyfile

PAPER_SIZES = ['A4', 'US Letter']
COPY_OPTS = ['1', '3']
SRC_FORMAT = '{dir}/{paper_size} paper size, {copies}x copy.pdf'
DST_FORMAT = '{dir}/{product} - {paper_size} Printable Sheets {copies}x{lang_suffix}.pdf'


def parse_args():
    parser = ArgumentParser()

    parser.add_argument('--lang', default='')
    parser.add_argument('product')
    parser.add_argument('src_dir')
    parser.add_argument('dst_dir')

    return parser.parse_args()


def check_files_exist(files):
    all_files = list(files.keys()) + list(files.values())
    missing_files = [
        f for f in all_files
        if not path.isfile(f)
    ]
    if missing_files:
        for f in missing_files:
            print(f'File not found: {f}', file=sys.stderr)
        sys.exit(1)


if __name__ == '__main__':
    args = parse_args()

    files = {}
    for size in PAPER_SIZES:
        for copies in COPY_OPTS:
            src = SRC_FORMAT.format(
                dir=args.src_dir.rstrip('/'),
                paper_size=size,
                copies=copies,
            )

            lang = args.lang
            if lang != '':
                lang = ' ' + lang

            dst = DST_FORMAT.format(
                dir=args.dst_dir.rstrip('/'),
                paper_size=size,
                copies=copies,
                product=args.product,
                lang_suffix=lang,
            ).replace(' ', '_')

            files[src] = dst

    check_files_exist(files)

    for src, dst in files.items():
        copyfile(src, dst)
