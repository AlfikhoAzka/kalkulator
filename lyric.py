import time

def typewriter_effect(text, delay=0.09, line_delay=0.5):
    for line in text.split('\n'):
        i = 0
        while i < len(line):
            if line.startswith("My eyes have always followed you around the room") and i == 0:
                for char in "My eyes have always":
                    print(char, end='', flush=True)
                    time.sleep(delay)
                time.sleep(0.8)
                i += len("My eyes have always")

            elif line.startswith("My eyes have always followed you around the room") and i == len("My eyes have always"):
                for char in " followed you":
                    print(char, end='', flush=True)
                    time.sleep(delay)
                time.sleep(0.3)
                i += len(" followed you")

            elif line.startswith("I'm holding on and waiting for the moment to find me") and i == line.find("moment") + 6:
                for char in " moment":
                    print(char, end='', flush=True)
                    time.sleep(delay)
                time.sleep(0.7)
                i += len(" moment")

            elif line.startswith("to find me") and i == 0:
                for char in line:
                    print(char, end='', flush=True)
                    time.sleep(0.15)  # Memperlambat bagian "to find meeeee"
                i += len(line)

            else:
                print(line[i], end='', flush=True)
                time.sleep(delay)
                i += 1
        print()

        if line == "Let me fly you to the moon":
            time.sleep(0.9)

        if line == "My eyes have always followed you around the room":
            time.sleep(0.1)

        if line == "God that I will ever need":
            time.sleep(0.4)

        time.sleep(line_delay)

lyrics = """
Let me fly you to the moon
My eyes have always followed you around the room
'Cause you're the only
God that I will ever need
I'm holding on and waiting for the moment 
to find me
"""

typewriter_effect(lyrics)
