
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

@app.route("/chart")
def chart():
    r = requests.get('https://api.airtable.com/v0/appY3TVmrawJmEE8Q/membership_points?api_key=keyx6ScOw6mCv5Vc4&sortField=_createdTime&sortDirection=desc')
    dict1 = r.json()
    dict2 = {}
    dataset = []
    name_list = []
    point_list = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset.append(dict2)
    for item in dataset:
        name_list.append(item.get('name'))
        point_list.append(item.get('point'))
    return render_template('chart.html', title='Chart Page', entries = zip(name_list, point_list))

@app.route('/membertable')
def membertable():
    r = requests.get('https://api.airtable.com/v0/appY3TVmrawJmEE8Q/membership_points?api_key=keyx6ScOw6mCv5Vc4&sortField=_createdTime&sortDirection=desc')
    dict = r.json()
    dataset = []
    for i in dict['records']:
            dict = i['fields']
            dataset.append(dict)
    return render_template('member.html', entries=dataset, title='Member Page')
