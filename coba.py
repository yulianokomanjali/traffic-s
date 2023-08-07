from flask import Flask, render_template, Response
import cv2
import numpy as np

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')


@app.route("/video_feed")
def video_feed():
     return Response(generate(),
          mimetype = "multipart/x-mixed-replace; boundary=frame")

@app.route("/video_feed1")
def video_feed1():
     return Response(generate1(),
          mimetype = "multipart/x-mixed-replace; boundary=frame")
if __name__ == '__main__':
    app.run(host='0.0.0.0', debug=False)