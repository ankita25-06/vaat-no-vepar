"""
Pulls the two embedded host photos out of the client's HTML file and saves them
into the theme's assets/img folder.

Usage (from the theme folder):
    python tools/extract-host-images.py path/to/vaato-no-vepar.html
"""
import base64, re, sys, pathlib

src = pathlib.Path(sys.argv[1]).read_text(encoding="utf-8")
imgs = re.findall(r"data:image/(?:webp|png|jpeg);base64,([A-Za-z0-9+/=]+)", src)
if len(imgs) < 2:
    sys.exit("Could not find two embedded images in that file.")
out = pathlib.Path(__file__).resolve().parent.parent / "assets" / "img"
out.mkdir(parents=True, exist_ok=True)
for name, data in zip(("host-mic.webp", "host-std.webp"), imgs[:2]):
    (out / name).write_bytes(base64.b64decode(data))
    print("saved", out / name)
