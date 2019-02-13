
# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template, request, json, redirect, session
from flask import Markup
import requests

app = Flask(__name__)

@app.route('/')
def index():
    r = requests.get('https://api.airtable.com/v0/apps6b1obxI3PPO81/buffer_blog?api_key=keyx6ScOw6mCv5Vc4&sortField=_createdTime&sortDirection=desc')
    dict = r.json()
    dataset = []
    for i in dict['records']:
            dict = i['fields']
            dataset.append(dict)
    return render_template('table.html', entries=dataset, title='Data Page')
